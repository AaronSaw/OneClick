//Shop Page

//Select Dropdown


//Search Function
$(document).ready(function () {
    let products = [];

    function toShow(x) {
        $(".product-list").empty();
        x.map(el => {
            $(".product-list").append(
                `<section class="carousel">
                <div class="carousel-container">
                    <div class="carousel-item">
                        <img src="storage/${el.image}" alt="Product Image" class="carousel-item-img">
                        <div class="panel">
                            <div class="inside">
                                <a href="{{URL::to('detail/${el.id}')}} " class="fa-solid fa-circle-info"></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href=""><h3><span class="info-name"> Name:</span> ${el.title}</h3> </a>
                            <strong>
                                <span class="price"> Price:  </span>$ ${el.price}
                            </strong>
                        </div>
                    </div>
                </div>
            </section>`
            );
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
                `<option value="${cart.ctitle}">${cart.ctitle}</opotion>`
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
    })
});

