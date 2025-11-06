// Basic client-side enhancements for forms
(function () {
    'use strict';

    function init() {
        // Disable double submit
        document.querySelectorAll('form').forEach(function (form) {
            form.addEventListener('submit', function (e) {
                var btn = form.querySelector('button[type="submit"]');
                if (btn) btn.disabled = true;
            });

            // simple required-field highlighting
            form.querySelectorAll('[required]').forEach(function (el) {
                el.addEventListener('invalid', function () {
                    var p = el.closest('div');
                    if (p) p.classList.add('has-error');
                });
                el.addEventListener('input', function () {
                    var p = el.closest('div');
                    if (p) p.classList.remove('has-error');
                });
            });
        });

        // Auto-calc total for orders if price available on page
        var qty = document.querySelector('input[name="quantity"]');
        var total = document.querySelector('input[name="total"]');
        var price = document.querySelector('input[name="price"]');
        if (qty && total && price) {
            function recalc() {
                var q = parseFloat(qty.value) || 0;
                var p = parseFloat(price.value) || 0;
                total.value = (q * p).toFixed(2);
            }
            qty.addEventListener('input', recalc);
            price.addEventListener('input', recalc);
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
