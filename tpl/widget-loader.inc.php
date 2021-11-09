<style wb-module="scss">

body {
  margin: 0;
}

body.preloading {
  overflow: hidden;

  * {
    visibility: hidden;
    box-sizing: border-box;

    &:before,
    &:after {
      box-sizing: border-box;
    }
  }

  .preloader {
    position: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh !important;
    width: 100% !important;
    top:0;
    transition: 0s;
    visibility: visible;
    background: #123b77!important; 
    border-radius: 0;

    img {
      margin-left: 15px;
    }

    * {
      visibility: visible;
    }
  }
}

.lds-ring {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}

.lds-ring div {
  box-sizing: border-box;
  display: block;
  position: absolute;
  width: 64px;
  height: 64px;
  margin: 8px;
  border: 8px solid #fff;
  border-radius: 50%;
  animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  border-color: #fff transparent transparent transparent;
}

.lds-ring div:nth-child(1) {
  animation-delay: -0.45s;
}

.lds-ring div:nth-child(2) {
  animation-delay: -0.3s;
}

.lds-ring div:nth-child(3) {
  animation-delay: -0.15s;
}

@keyframes lds-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>

<script>
      document.body.classList.add("preloading");
      document.body.style.opacity = "1";
</script>

<div class="preloader">
  <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
  <img src="/tpl/assets/img/preloader-logo.svg" alt="">
</div>
