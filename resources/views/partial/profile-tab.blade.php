<div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
    <div class="card-body" style="text-align:right;direction: rtl;">
        <form class="form-horizontal form-material">
            <div class="form-group">
                <div class="form-group text-center">
                    <!-- صورة البروفايل الافتراضية -->
                    <img id="preview" src="../assets/images/users/st/nada.jpg" alt="Profile Picture"
                        style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #6a7a8c; margin-bottom: 15px;">
                    <!-- زر اختيار صورة -->
                    <div>
                        <label class="btn btn-outline-primary mt-2" for="profileImage">
                            <i class="fas fa-upload"></i> رفع صورة شخصية
                        </label>
                        <input type="file" id="profileImage" accept="image/*" style="display: none;"
                            onchange="previewImage(event)">
                    </div>
                </div>
                <script>
                    function previewImage(event) {
                        const image = document.getElementById('preview');
                        image.src = URL.createObjectURL(event.target.files[0]);
                    }
                </script>
            </div>
            <div class="form-group">
                <label class="col-md-12">الاسم</label>
                <div class="col-md-12">
                    <input type="text" placeholder="ندى خالد سعيد" class="form-control form-control-line">
                </div>
            </div>
            <div class="form-group ">
                <label class="col-md-12">رقم الهاتف(يفضل ان يكون متصل بالوتساب)</label>
                <div class="col-md-12">
                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                </div>
            </div>
            <div class="form-group ">
                <div class="col-sm-12">
                    <button class="btn btn-primary">تحديث</button>
                </div>
            </div>
        </form>
    </div>
</div>
