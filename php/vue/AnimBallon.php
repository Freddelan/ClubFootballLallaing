
<!-- <p>Click anywhere to move the ball</p> -->
<div id="foo">
    
</div>
<script>
var f = document.getElementById('foo');
document.addEventListener('click', function(ev){
    f.style.transform = 'translateY('+(ev.clientY-75)+'px)';
    f.style.transform += 'translateX('+(ev.clientX-25)+'px)';
},false);

</script>