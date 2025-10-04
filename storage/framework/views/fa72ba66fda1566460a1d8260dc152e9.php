<a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
    <div class="d-flex align-items-center">
        <i class="mdi mdi-magnify font-20 mr-1"></i>
        <div class="ml-1 d-none d-sm-block">
            <span>بحث</span>
        </div>
    </div>
</a>
<form class="app-search position-absolute" onsubmit="goToSearchPage(event)">
    <input type="text" class="form-control" id="searchInput" placeholder="ما المادة التى تريد ان تبحث عنها ؟">
    <a class="srh-btn">
        <i class="ti-close"></i>
    </a>
</form>
<script>
    function goToSearchPage(event) {
        event.preventDefault(); // منع الإرسال العادي
        const query = document.getElementById("searchInput").value.trim();
        if (query) {
            // التوجيه لصفحة النتائج مع الكلمة في الرابط
            window.location.href = "pages-search-result.html?q=" + encodeURIComponent(query);
        }
    }
</script>
<?php /**PATH D:\Projects\مشروع الكلية\project code\f.s.s.r\resources\views/layout/components/search.blade.php ENDPATH**/ ?>