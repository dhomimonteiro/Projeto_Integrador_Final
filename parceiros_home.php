<style>
    .wrapper {
        position: relative;
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    .wrapper i {
        height: 30px;
        width: 30px;
        cursor: pointer;
        position: absolute;
        z-index: 10;
        font-size: 1rem;
        text-align: center;
        line-height: 30px;
        background: white;
        border-radius: 50%;
    }

    .wrapper i:first-child {
        left: 10px;
        top: calc(100%/3);
    }

    .wrapper i:last-child {
        right: 10px;
        top: calc(100%/3);
    }

    .wrapper .carousel {
        font-size: 0px;
        white-space: nowrap;
        overflow: hidden;
        scroll-behavior: smooth;
    }

    .carousel {
        width: 95%;
        margin-left: 20px;
        margin-right: 20px;
    }

    .carousel img {
        margin-left: 15px;
        height: 80px;
    }

    .carousel img:first-child {
        margin-left: 30px;
    }
</style>
<div class="row">
    <div class="col-sm-12 d-flex flex-row justify-content-center pt-3">
        <h1>Conheça nossos parceiros</h1>
    </div>
</div>
<div class="wrapper my-5">
    <i id="left" class="fa-solid fa-angle-left"></i>
    <div class="carousel">
        <img src="img/Nestlé_logo.svg.png" alt="" class="logoParceiro">
        <img src="img/americanas-logo.png" alt="" class="logoParceiro">
        <img src="img/giraffas-logo.png" alt="" class="logoParceiro">
        <img src="img/Nestlé_logo.svg.png" alt="" class="logoParceiro">
        <img src="img/Nestlé_logo.svg.png" alt="" class="logoParceiro">
        <img src="img/Nestlé_logo.svg.png" alt="" class="logoParceiro">
        <img src="img/Nestlé_logo.svg.png" alt="" class="logoParceiro">
        <img src="img/Nestlé_logo.svg.png" alt="" class="logoParceiro">
        <img src="img/Nestlé_logo.svg.png" alt="" class="logoParceiro">
        <img src="img/Nestlé_logo.svg.png" alt="" class="logoParceiro">
    </div>
    <i id="right" class="fa-solid fa-angle-right"></i>
</div>

<script>
    const carousel = document.querySelector(".carousel"),
        firstImg = carousel.querySelectorAll("img")[0];
    arrowIcons = document.querySelectorAll(".wrapper i");

    let isDragStart = false,
        prevPageX, prevScrollLeft;
    let firstImgWidth = firstImg.clientWidth + 200;

    arrowIcons.forEach(icon => {
        icon.addEventListener("click", () => {
            carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        });
    });

    const dragStart = (e) => {
        isDragStart = true;
        prevPageX = e.pageX;
        prevScrollLeft = carousel.scrollLeft;

    }
    const dragging = (e) => {
        if (!isDragStart) return;
        e.preventDefault();
        let positionDiff = e.pageX - prevPageX;
        carousel.scrollLeft = prevScrollLeft - positionDiff;
    }

    const dragStop = () => {
        isDragStart = false;
    }

    carousel.addEventListener("mousedown", dragStart);
    carousel.addEventListener("mousemove", dragging);
    carousel.addEventListener("mouseup", dragStop);
</script>




<!-- <style>
    .btn-right {
        position: absolute;
        z-index: 10;
        right: 20px;
    }
</style>


<div class="col-12 d-flex flex-row justify-content-center pt-3">
    <h1>Conheça nossos parceiros</h1>
</div>
<div class="div">

    <div class="col-12 d-flex flex-row bg-dark w-100 mt-3 mb-5 scrollParceiros">
        <div class="flex-shrink-0 align-self-center">
            <button class="btn-left btn-link toggle p-2 text-white"><i class="fa fa-arrow-left"></i></button>
        </div>
        <ul class="menu d-flex flex-row">
            <div class="imagemParceiro ms-3 me-4">
                <img src="img/Nestlé_logo.svg.png" alt="" class="logoParceiro">
            </div>
            <div class="imagemParceiro me-4">
                <img src="img/americanas-logo.png" alt="" class="logoParceiro">
            </div>
            <div class="imagemParceiro me-4">
                <img src="img/giraffas-logo.png" alt="" class="logoParceiro">
            </div>
            <div class="imagemParceiro me-4">
                <img src="img/Nestlé_logo.svg.png" alt="" class="logoParceiro">
            </div>
            <div class="imagemParceiro me-4">
                <img src="img/Nestlé_logo.svg.png" alt="" class="logoParceiro">
            </div>
            <div class="imagemParceiro me-4">
                <img src="img/Nestlé_logo.svg.png" alt="" class="logoParceiro">
            </div>
            <div class="flex-shrink-0 align-self-center">
                <button class="btn-right btn-link toggle p-2 text-white"><i class="fa fa-arrow-right"></i></button>
            </div>
        </ul>
    </div>
</div>

<script>
    function scrollDireita() {
        var left = document.querySelector('.menu');
        left.scrollBy(350, 0);
    }

    function scrollEsquerda() {
        var right = document.querySelector('.menu');
        right.scrollBy(-350, 0);
    }
</script> -->