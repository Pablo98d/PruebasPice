// Inicialización de Swiper
var swiper = new Swiper(".swiper", {
    effect: "cube",
    grabCursor: true,
    loop: true,
    speed: 1000,
    cubeEffect: {
      shadow: false,
      slideShadows: true,
      shadowOffset: 10,
      shadowScale: 0.94,
    },
    autoplay: {
      delay: 2600,
      pauseOnMouseEnter: true,
    },
  });
  
  // Configuración de tsParticles
  tsParticles.load("tsparticles", {
    fpsLimit: 60,
    backgroundMode: {
      enable: true,
      zIndex: 0,
    },
    particles: {
      number: {
        value: 60,
      },
      color: {
        value: ["#fff"],
      },
      shape: {
        type: ["circle", "square"],
      },
      opacity: {
        value: 0.2,
      },
      size: {
        value: { min: 4, max: 7 },
      },
      move: {
        enable: true,
        speed: 0.3,
        direction: "top-right",
        straight: true,
      },
    },
    detectRetina: true,
  });
  