<h1> user page </h1>

      <?php if($this->session->flashdata('status')) : ?>
            <div class="alert alert-success">
                <?= $this->session->flashdata('status'); ?>
        </div>
        <?php endif; ?>



        