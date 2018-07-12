(function() {
  var Theme = {
    init: function() {
      this.enableParticle();
    },

    enableParticle: function() {
      particlesJS.load('particles-background', 'assets/js/particles.json', function() {
        console.log('callback - particles.js config loaded');
      });
    }
  };

  document.addEventListener('DOMContentLoaded', function() {
    Theme.init();
  }, false);
})();

