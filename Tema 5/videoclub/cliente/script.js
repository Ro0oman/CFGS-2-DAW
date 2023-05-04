document.getElementById("clip").addEventListener("mouseover", function() {
	this.play();
});

document.getElementById("clip").addEventListener("mouseleave", function() {
	this.pause();
  this.currentTime = 0;  
  this.addEventListener('pause', (event) => {
    this.load(0)
  });
});

