</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.0-beta.2
    </div>
    <strong>Copyright &copy; 2019 <a href="https://turgutkursat.org">EntrBit Software</a>.</strong> All rights
    reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php $this->load->view("$this->view/script") ?>

<?php if (!empty($this->session->flashdata('text') && !empty($this->session->flashdata('type')))): ?>
    <script !src="">
        iziToast.<?=$this->session->flashdata('type')?>({
            position: 'topCenter',
            title: '<?=$this->session->flashdata('text')?>',
        });
    </script>
<?php endif; ?>
</body>
</html>
