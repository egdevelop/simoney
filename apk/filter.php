<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <select class="price-sorting">
        <option>Urutkan</option>
        <option value="l2h">Terendah</option>
        <option value="h2l">Tertinggi</option>
    </select>

    <div class="products-grid">
        <div class="productbox">
            <p class="price">300</p>
        </div>

        <div class="productbox">
            <p class="price">30000</p>
        </div>

        <div class="productbox">
            <p class="price">30</p>
        </div>

        <div class="productbox">
            <p class="price">20</p>
        </div>
    </div>

    <script>
        $(document).on("change", ".price-sorting", function() {
            var sortingMethod = $(this).val();
            if (sortingMethod == 'l2h') {
                sortProductsPriceAscending();
            } else if (sortingMethod == 'h2l') {
                sortProductsPriceDescending();
            }
        });

        function getAmount(price) {
            return parseFloat(price.replace('$', ''));
        }

        function sortProductsPriceAscending() {
            var products = $('.productbox');
            products.sort(function(a, b) {
                return getAmount($(a).children('.price').text()) - getAmount($(b).children('.price').text())
            });
            $(".products-grid").html(products);
        }

        function sortProductsPriceDescending() {
            var products = $('.productbox');
            products.sort(function(a, b) {
                return getAmount($(b).children('.price').text()) - getAmount($(a).children('.price').text())
            });
            $(".products-grid").html(products);
        }
    </script>
</body>

</html>