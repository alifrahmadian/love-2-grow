<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="registration-card w-50">
            <p class="mt-5 text-center registration-desc ">
                Selamat Datang di Love2Grow Clinic. Silakan untuk membuat akun terlebih dahulu sebelum melakukan pendaftaran pasien! Form registrasi ini merupakan data dari orangtua atau keluarga pasien.
            </p>

            <p class=text-center>Sudah punya akun? Silakan <a href="/login">login</a></p>

    
            <form class="align-self-center mb-4 w-100" action="<?php echo e(ROUTE('register')); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="phone_number">Nomor Telepon</label>
                    <input type="tel" class="form-control" name="phone_number">
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <textarea class="form-control" name="address" cols="30" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="member_job">Pekerjaan</label>
                    <input type="text" class="form-control" name="member_job">
                </div>
                <div class="form-group">
                    <label for="patient_relation">Hubungan dengan pasien</label>
                    <select class="form-control" name="patient_relation" id="">
                        <option value="Ayah">Ayah</option>
                        <option value="Ibu">Ibu</option>
                        <option value="Kakak">Kakak</option>
                        <option value="Adik">Adik</option>
                        <option value="Paman">Paman</option>
                        <option value="Bibi">Bibi</option>
                        <option value="Sepupu">Sepupu</option>
                        <option value="Keponakan">Keponakan</option>
                        <option value="Nenek">Nenek</option>
                        <option value="Kakek">Kakek</option>
                    </select>
                </div>
    
                <div class="registerButtonWrapper mb-5 text-center">
                    <button class="button mb-2 reg-submit-button" type="submit">Daftar</button>
                </div>
            </form>
        </div>
        


    </div>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\OneDrive - Bina Nusantara University\College Life\Skripsi\Skripsi\Apps\love-2-grow-clinic\resources\views/auth/register.blade.php ENDPATH**/ ?>