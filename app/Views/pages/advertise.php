<?= $this->extend('layouts/template') ?>

<?= $this->section('content'); ?>

<section class="advertise-container">
    <div class="advertise-head">
        <h1>Lorem, ipsum. <br> Lorem, ipsum</h1>
    </div>

    <div class="advertise-form">
        <form action="">
            <div class="form-container">
                <h2>Kolaborasi dengan UriEvent</h2>
                <input type="text" class="input-form" placeholder="Nama Institusi">
                <input type="text" class="input-form" placeholder="Nama Institusi">
                <input type="text" class="input-form" placeholder="Nama Institusi">
                <input type="text" class="input-form" placeholder="Nama Institusi">
                <input type="textarea" class="textarea-form" placeholder="Nama Institusi">
                <div class="column">
                    <input type="text" class="input2-form" placeholder="Nama Institusi">
                    <input type="text" class="input2-form" placeholder="Nama Institusi">
                </div>
                <button type="submit" class="advertise.button">Submit</button>
            </div>
        </form>

        <!-- <div class="form">
        <form action="">
            <input type="text">
            <input type="text">
            <input type="text">
        </form>
        </div> -->
    </div>
    <br>
    <br>
    <br>
</section>


<?= $this->endsection(); ?>