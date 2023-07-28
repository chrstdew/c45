<?php
    $lokasi = $this->input->get('lokasi');
    $jenis = $this->input->get('jenis');
    $harga = $this->input->get('harga');
    $jual_sewa = $this->input->get('jual_sewa');
    $kamar_tidur = $this->input->get('kamar_tidur');
    $kamar_mandi = $this->input->get('kamar_mandi');
    $kamar_tidur_pembantu = $this->input->get('kamar_tidur_pembantu');
    $kamar_mandi_pembantu = $this->input->get('kamar_mandi_pembantu');
    $tingkat = $this->input->get('tingkat');
    $sertifikat = $this->input->get('sertifikat');

    echo '
    <div class="search-section">
        <div class="container">
            <div class="row">
                <div class="banner-heading">
                    <label>Find Your Property that</label>
                    <h2>Suits You</h2>
                    <p>
                        Lorem ipsum is simply dummy text for typing and printing test is
                        available.
                    </p>
                </div>
                <div class="banner-tab">
                    <form method="get">
                        <div class="banner-tab-content">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="banner-input">
                                        <select class="form-control select" data-placeholder="Lokasi ..." name="lokasi" id="lokasi" required>
                                            <option value="">Lokasi ...</option>';
                                            foreach (lokasi() as $i => $r) {
                                                $select = '';
                                                if($lokasi==($i+1)){
                                                    $select = 'selected';
                                                }
                                                echo '<option value="'.($i+1).'" '.$select.'>'.$r.'</option>';
                                            }
                                            echo '
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="banner-input">
                                        <select class="form-control select" data-placeholder="Jenis ..." name="jenis" id="jenis" required>
                                            <option value="">Jenis ...</option>';
                                            foreach (jenis() as $i => $r) {
                                                $select = '';
                                                if($jenis==($i+1)){
                                                    $select = 'selected';
                                                }
                                                echo '<option value="'.($i+1).'" '.$select.'>'.$r.'</option>';
                                            }
                                            echo '
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="banner-input">
                                        <select class="form-control select" data-placeholder="Harga ..." name="harga" id="harga" required>
                                            <option value="">Harga ...</option>';
                                            foreach (harga() as $i => $r) {
                                                $select = '';
                                                if($harga==($i+1)){
                                                    $select = 'selected';
                                                }
                                                echo '<option value="'.($i+1).'" '.$select.'>'.$r.'</option>';
                                            }
                                            echo '
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="banner-input">
                                        <select class="form-control select" data-placeholder="Jual / Sewa ..." name="jual_sewa" id="jual_sewa" required>
                                            <option value="">Jual / Sewa ...</option>';
                                            foreach (jual_sewa() as $i => $r) {
                                                $select = '';
                                                if($jual_sewa==($i+1)){
                                                    $select = 'selected';
                                                }
                                                echo '<option value="'.($i+1).'" '.$select.'>'.$r.'</option>';
                                            }
                                            echo '
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-tab-content">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="banner-input">
                                        <select class="form-control select" data-placeholder="Kamar Tidur  ..." name="kamar_tidur" id="kamar_tidur" required>
                                            <option value="">Kamar Tidur ...</option>';
                                            foreach (looping(10) as $i => $r) {
                                                $select = '';
                                                if($kamar_tidur==$r){
                                                    $select = 'selected';
                                                }
                                                echo '<option value="'.$r.'" '.$select.'>'.$r.'</option>';
                                            }
                                            echo '
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="banner-input">
                                        <select class="form-control select" data-placeholder="Kamar Mandi ..." name="kamar_mandi" id="kamar_mandi" required>
                                            <option value="">Kamar Mandi ...</option>';
                                            foreach (looping(10) as $i => $r) {
                                                $select = '';
                                                if($kamar_mandi==$r){
                                                    $select = 'selected';
                                                }
                                                echo '<option value="'.$r.'" '.$select.'>'.$r.'</option>';
                                            }
                                            echo '
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="banner-input">
                                        <select class="form-control select" data-placeholder="Kamar Tidur Pembantu ..." name="kamar_tidur_pembantu" id="kamar_tidur_pembantu" required>
                                            <option value="">Kamar Tidur Pembantu ...</option>';
                                            foreach (looping(10) as $i => $r) {
                                                $select = '';
                                                if($kamar_tidur_pembantu==$r){
                                                    $select = 'selected';
                                                }
                                                echo '<option value="'.$r.'" '.$select.'>'.$r.'</option>';
                                            }
                                            echo '
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="banner-input">
                                        <select class="form-control select" data-placeholder="Kamar Mandi Pembantu ..." name="kamar_mandi_pembantu" id="kamar_mandi_pembantu" required>
                                            <option value="">Kamar Mandi Pembantu ...</option>';
                                            foreach (looping(10) as $i => $r) {
                                                $select = '';
                                                if($kamar_mandi_pembantu==$r){
                                                    $select = 'selected';
                                                }
                                                echo '<option value="'.$r.'" '.$select.'>'.$r.'</option>';
                                            }
                                            echo '
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-tab-content">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="banner-input">
                                        <select class="form-control select" data-placeholder="Tingkat ..." name="tingkat" id="tingkat" required>
                                            <option value="">Tingkat ...</option>';
                                            foreach (looping(5) as $i => $r) {
                                                $select = '';
                                                if($tingkat==$r){
                                                    $select = 'selected';
                                                }
                                                echo '<option value="'.$r.'" '.$select.'>'.$r.'</option>';
                                            }
                                            echo '
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="banner-input">
                                        <select class="form-control select" data-placeholder="Sertifikat ..." name="sertifikat" id="sertifikat" required>
                                            <option value="">Sertifikat ...</option>';
                                            foreach (sertifikat() as $i => $r) {
                                                $select = '';
                                                if($sertifikat==($i+1)){
                                                    $select = 'selected';
                                                }
                                                echo '<option value="'.($i+1).'" '.$select.'>'.$r.'</option>';
                                            }
                                            echo '
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <button type="submit" name="search" class="btn btn-banner">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>';
?>

{CONTENT}