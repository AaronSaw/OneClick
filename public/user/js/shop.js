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
                        <li class="carousel-item wow animate__jackInTheBox">
                            <img src="storage/${el.image}" alt="Product Image" class="carousel-item-img">
                            <div class="panel">
                                <div class="inside">
                                <a href="http://127.0.0.1:8000/detail/${el.id} " class="fa-solid fa-circle-info"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href=""><h3 class="info-name"><span> Name:</span> ${toShort(el.title)}</h3> </a>
                                <strong class="price">
                                    <span> Price:  </span> ${ el.price.toLocaleString()} MMK
                                </strong>
                            </div>
                        </li>
                    </ul>
                </section></a>`
            );
            function toShort(str, max = 16) {
                if (str.length > max) {
                    return str.substring(0, max) + ".."
                } else {
                    return str;
                }
            }
        });
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
                if (product.title.toLowerCase().indexOf(keyword) > -1  || product.price == keyword) {
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
