//Shop Page

//Search Function
$(document).ready(function () {

    let products = [];

    function toShow(x) {
        $(".product-list").empty();
        x.map(el => {
            $(".product-list").append(
                ` <a href="http://127.0.0.1:8000/detail/${el.id} "><section class="carousel" >
                    <ul class="carousel-container">
                        <li class="carousel-item reveal">
                            <img src="storage/${el.image}" alt="Product Image" class="carousel-item-img">
                            <div class="panel">
                                <div class="inside">
                                <a href="http://127.0.0.1:8000/detail/${el.id} " class="fa-solid fa-circle-info"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href=""><h3><span class="info-name"> Name:</span> ${el.title}</h3> </a>
                                <strong>
                                    <span class="price"> Price:  </span>$ ${el.price}
                                </strong>
                            </div>
                        </li>
                    </ul>
                </section></a>`
            );
        });
        // Scroll Reveal
        window.sr = ScrollReveal({ reset: true });
        sr.reveal('.reveal', {
            duration: 1000,
            origin: "bottom",
            distance: "1px",
            easing: "cubic-bezier(.37,.01,.74,1)",
            opacity: 0.7,
            scale: 0.7,
            reset: true,
            viewFactor: 1,
            afterReveal: revealInfo,
        });
        var revealInfo = sr.reveal('.product-info', {
            duration: 1000,
            delay: 300,
            scale: 1,
            distance: '10px',
            origin: 'bottom',
            reset: true,
            easing: 'ease-out',
            viewFactor: 1,
        });
    }

    function toShort(str, max = 100) {
        if (str.length > max) {
            return str.substring(0, max) + "...."
        } else {
            return str;
        }
    }

    //start

    $.get("http://127.0.0.1:8000/api/products", function (data) {
        products = data;
        toShow(products);
    });

    $("#show-search").on("keyup", function () {
        var keyword = $(this).val().toLowerCase();
        if (keyword.trim().length) {
            let filterProduct = products.filter(product => {
                if (product.title.toLowerCase().indexOf(keyword) > -1 || product.description.toLowerCase().indexOf(keyword) > -1 || product.price == keyword) {
                    return product;
                }
            });
            toShow(filterProduct);
        } else {
            toShow(products);
        }
    });

    $.get("http://127.0.0.1:8000/api/categories", function (data) {
        data.map(cart => {
            $("#list-category").append(
                `<option value="${cart.ctitle}">${cart.ctitle}</option>`
            )
        });
    });

    $("#list-category").on("change", function () {
        let cat = $(this).val().toLowerCase();
        console.log(cat);
        //console.log(products);
        if (cat != 0) {
            let filterProduct = products.filter(product => {
                {
                    if (cat === product.ctitle.toLowerCase()) {
                        return product;
                    }
                }
            });
            toShow(filterProduct)
        } else {
            toShow(products);
        }
    });

});
