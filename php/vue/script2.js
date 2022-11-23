/*!
 * Blast.js: Blast text apart to make it manipulable.
 * @version 1.1.1
 * @dependency Works with both jQuery and Zepto.
 * @docs julian.com/research/blast
 * @license Copyright 2014 Julian Shapiro. MIT License: http://en.wikipedia.org/wiki/MIT_License
 */
!(function ($, e, t, a) {
  var n = (function () {
      if (t.documentMode) return t.documentMode;
      for (var e = 7; e > 0; e--) {
        var n = t.createElement("div");
        if (
          ((n.innerHTML = "<!--[if IE " + e + "]><span></span><![endif]-->"),
          n.getElementsByTagName("span").length)
        )
          return (n = null), e;
        n = null;
      }
      return a;
    })(),
    r = e.console || { log: function () {}, time: function () {} },
    i = "blast",
    s = {
      latinPunctuation: "–—′’'“″„\"(«.…¡¿′’'”″“\")».…!?",
      latinLetters:
        "\\u0041-\\u005A\\u0061-\\u007A\\u00C0-\\u017F\\u0100-\\u01FF\\u0180-\\u027F",
    },
    l = {
      abbreviations: new RegExp(
        "[^" +
          s.latinLetters +
          "](e\\.g\\.)|(i\\.e\\.)|(mr\\.)|(mrs\\.)|(ms\\.)|(dr\\.)|(prof\\.)|(esq\\.)|(sr\\.)|(jr\\.)[^" +
          s.latinLetters +
          "]",
        "ig"
      ),
      innerWordPeriod: new RegExp(
        "[" + s.latinLetters + "].[" + s.latinLetters + "]",
        "ig"
      ),
      onlyContainsPunctuation: new RegExp("[^" + s.latinPunctuation + "]"),
      adjoinedPunctuation: new RegExp(
        "^[" + s.latinPunctuation + "]+|[" + s.latinPunctuation + "]+$",
        "g"
      ),
      skippedElements: /(script|style|select|textarea)/i,
      hasPluginClass: new RegExp("(^| )" + i + "( |$)", "gi"),
    };
  ($.fn[i] = function (d) {
    function o(e) {
      return e
        .replace(l.abbreviations, function (e) {
          return e.replace(/\./g, "{{46}}");
        })
        .replace(l.innerWordPeriod, function (e) {
          return e.replace(/\./g, "{{46}}");
        });
    }
    function c(e) {
      return e.replace(/{{(\d{1,3})}}/g, function (e, t) {
        return String.fromCharCode(t);
      });
    }
    function u(e, a) {
      var n = t.createElement(a.tag);
      if (
        ((n.className = i),
        a.customClass &&
          ((n.className += " " + a.customClass),
          a.generateIndexID && (n.id = a.customClass + "-" + f.blastedIndex)),
        a.generateValueClass === !0 &&
          !a.search &&
          ("character" === a.delimiter || "word" === a.delimiter))
      ) {
        var r,
          s = e.data;
        "word" === a.delimiter &&
          l.onlyContainsPunctuation.test(s) &&
          (s = s.replace(l.adjoinedPunctuation, "")),
          (r = i + "-" + a.delimiter.toLowerCase() + "-" + s.toLowerCase()),
          (n.className += " " + r);
      }
      return (
        a.aria && n.setAttribute("aria-hidden", "true"),
        n.appendChild(e.cloneNode(!1)),
        n
      );
    }
    function g(e, t) {
      var a = -1,
        n = 0;
      if (3 === e.nodeType && e.data.length) {
        if (
          (f.nodeBeginning &&
            ((e.data =
              t.search || "sentence" !== t.delimiter ? c(e.data) : o(e.data)),
            (f.nodeBeginning = !1)),
          (a = e.data.search(p)),
          -1 !== a)
        ) {
          var r = e.data.match(p),
            i = r[0],
            s = r[1] || !1;
          f.blastedIndex++,
            "" === i ? a++ : s && s !== i && ((a += i.indexOf(s)), (i = s));
          var d = e.splitText(a);
          d.splitText(i.length),
            (n = 1),
            t.search || "sentence" !== t.delimiter || (d.data = c(d.data));
          var m = u(d, t, f.blastedIndex);
          d.parentNode.replaceChild(m, d), f.wrappers.push(m);
        }
      } else if (
        1 === e.nodeType &&
        e.hasChildNodes() &&
        !l.skippedElements.test(e.tagName) &&
        !l.hasPluginClass.test(e.className)
      )
        for (var h = 0; h < e.childNodes.length; h++)
          (f.nodeBeginning = !0), (h += g(e.childNodes[h], t));
      return n;
    }
    function m(t, s) {
      s.debug && r.time("blast reversal");
      var l = !1;
      t
        .removeClass(i + "-root")
        .removeAttr("aria-label")
        .find("." + i)
        .each(function () {
          var e = $(this);
          if (e.closest("." + i + "-root").length) l = !0;
          else {
            var t = this.parentNode;
            7 >= n && t.firstChild.nodeName,
              t.replaceChild(this.firstChild, this),
              t.normalize();
          }
        }),
        e.Zepto ? t.data(i, a) : t.removeData(i),
        s.debug &&
          (r.log(
            i +
              ": Reversed Blast" +
              (t.attr("id") ? " on #" + t.attr("id") + "." : ".") +
              (l
                ? " Skipped reversal on the children of one or more descendant root elements."
                : "")
          ),
          r.timeEnd("blast reversal"));
    }
    var h = $.extend({}, $.fn[i].defaults, d),
      p,
      f = {};
    if (
      h.search.length &&
      ("string" == typeof h.search || /^\d/.test(parseFloat(h.search)))
    )
      (h.delimiter = h.search
        .toString()
        .replace(/[-[\]{,}(.)*+?|^$\\\/]/g, "\\$&")),
        (p = new RegExp(
          "(?:^|[^-" +
            s.latinLetters +
            "])(" +
            h.delimiter +
            "('s)?)(?![-" +
            s.latinLetters +
            "])",
          "i"
        ));
    else
      switch (
        ("string" == typeof h.delimiter &&
          (h.delimiter = h.delimiter.toLowerCase()),
        h.delimiter)
      ) {
        case "letter":
        case "char":
        case "character":
          p = /(\S)/;
          break;
        case "word":
          p = /\s*(\S+)\s*/;
          break;
        case "sentence":
          p = /(?=\S)(([.]{2,})?[^!?]+?([.…!?]+|(?=\s+$)|$)(\s*[′’'”″“")»]+)*)/;
          break;
        case "element":
          p = /(?=\S)([\S\s]*\S)/;
          break;
        default:
          if (!(h.delimiter instanceof RegExp))
            return (
              r.log(
                i +
                  ": Unrecognized delimiter, empty search string, or invalid custom Regex. Aborting."
              ),
              !0
            );
          p = h.delimiter;
      }
    if (
      (this.each(function () {
        var e = $(this),
          n = e.text();
        if (d !== !1) {
          (f = { blastedIndex: 0, nodeBeginning: !1, wrappers: [] }),
            e.data(i) === a ||
              ("search" === e.data(i) && h.search !== !1) ||
              (m(e, h),
              h.debug && r.log(i + ": Removed element's existing Blast call.")),
            e.data(i, h.search !== !1 ? "search" : h.delimiter),
            h.aria && e.attr("aria-label", n),
            h.stripHTMLTags && e.html(n);
          try {
            t.createElement(h.tag);
          } catch (s) {
            (h.tag = "span"),
              h.debug &&
                r.log(i + ": Invalid tag supplied. Defaulting to span.");
          }
          e.addClass(i + "-root"),
            h.debug && r.time(i),
            g(this, h),
            h.debug && r.timeEnd(i);
        } else d === !1 && e.data(i) !== a && m(e, h);
        h.debug &&
          $.each(f.wrappers, function (e, t) {
            r.log(i + " [" + h.delimiter + "] " + this.outerHTML),
              (this.style.backgroundColor = e % 2 ? "#f12185" : "#075d9a");
          });
      }),
      d !== !1 && h.returnGenerated === !0)
    ) {
      var b = $().add(f.wrappers);
      return (b.prevObject = this), (b.context = this.context), b;
    }
    return this;
  }),
    ($.fn.blast.defaults = {
      returnGenerated: !0,
      delimiter: "word",
      tag: "span",
      search: !1,
      customClass: "",
      generateIndexID: !1,
      generateValueClass: !1,
      stripHTMLTags: !1,
      aria: !0,
      debug: !1,
    });
})(window.jQuery || window.Zepto, window, document);

function getRandom(min, max) {
  return Math.random() * (max - min) + min;
}

$("h1").blast({ delimiter: "character" });
$("h1").hover(
  function () {
    var $spans = $(this).find("span");
    $spans.each(function () {
      var offsetX = getRandom(-300, 300);
      var offsetY = getRandom(-20, 20);
      var scale = getRandom(0.5, 3);
      $(this).velocity(
        {
          translateX: offsetX,
          translateY: offsetY,
          scale: scale,
          color: "#990000",
        },
        300,
        [50, 5]
      );
    });
  },
  function () {
    var $spans = $(this).find("span");
    $spans.each(function () {
      $(this).velocity(
        { translateX: 0, translateY: 0, scale: 1, color: "#000" },
        100
      );
    });
  }
);
