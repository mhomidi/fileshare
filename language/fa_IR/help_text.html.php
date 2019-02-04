<h3>به FileSender خوش آمدید</h3>

<p>

    FileSender یک برنامه تحت وب است که به کاربران احراز شده چنین امکانی را می‌دهد تا ساده و امن فایل‌های بزرگ
    را به کاربران دیگر ارسال کنند. کاربرانی که حسابی ندارند می‌توانند با داشتن گواهی ‌بارگذاری به عنوان مهمان
    مطالب خود را ارسال کنند. FileSender برای تامین نیازهای جامعه‌ی تحصیل کرده گسترش بافته است.
</p>

<h4>برای مهمانان</h4>

<p>

    اگر برای شما از این سابت گواهی‌ای ارسال گردیده‌است می توانید با آن یک یا چند بار اینکار را انجام دهید.
    ساده‌ترین راه برای اینکار این است که اطلاعات را از طریق ایمیل دعوت نامه استفاده کنید.
    هنگامی که به عنوان یک مهمان بارگذاری می‌کنید، حتما مطمئن شوید که ایمیل دعوت نامه از طرف FileSender مرکز مورد نظر باشد.
    اگر شما انتظار دعوت نامه‌ای را نداشته‌اید، ‌آن دعوت نامه نامعتبر است.

</p>
<p>

    کسی که شما را به این سامانه دعوت کرده است این امکان را به شما داده است که فایل‌ها را بارگذاری کنید و به دیگران این اجازه‌ را
    بدهید که آن را دانلود کنند.
</p>

<h4>برای کاربران احراز شده</h4>

<p>

     اگر این برنامه از FileSender در امکانات مرکز شما باشد، دکمه ورود در سمت بالا راست صفحه به شما این
    امکان را می‌دهد تا با حساب مرکز خود وارد آن شوید. اکر شما رمز عبور و یا نام کاربری خود را از مرکز
    خود ندارید، باید با مسئول انفورماتیک خود تماس بگیرید.

</p>

<p>
    As an authenticated user you should be able to upload files one or
    more times and either have FileSender email the recipients after
    your upload completes or provide you with a link to allow file
    download. You should also be able to invite other researchers to
    the system to upload one or more files as a guest.


</p>

<h3>Possible Download Size Limitations</h3>
<p>
    Any modern browser will download files of any size from the site.
    Nothing special is required for downloads.
</p>

<h3>Possible Upload Size Limitations</h3>

<p>
    If your browser supports HTML5 then you should be able to upload
    files of any size up to {size:cfg:max_transfer_size}. Current versions of Firefox and Chrome on
    Windows, Mac OS X and Linux are known to have HTML5 support.
</p>

<h3>Your browser's features</h3>
<ul class="fa-ul">
    <li data-feature="html5"><img src="images/html5_installed.png" alt="HTML5 upload enabled" /> You can upload files of any size up to {size:cfg:max_transfer_size} per transfer and you can resume uploads.</li>
    <li data-feature="nohtml5"><img src="images/html5_none.png" alt="HTML5 upload disabled" /> You can upload files of at most {size:cfg:max_legacy_file_size} each and up to {size:cfg:max_transfer_size} per transfer.</li>
</ul>

<h3>Uploads of <i>any size</i> with HTML5</h3>
<ul class="fa-ul">
    <li><i class="fa-li fa fa-caret-right"></i>You'll be able to use this method if the <img src="images/html5_installed.png" alt="HTML5 upload enabled" /> sign is displayed above</li>
    <li><i class="fa-li fa fa-caret-right"></i>To enable this functionnality simply use an up to date browser that supports HTML5, the latest version of the "language of the web".</li>
    <li><i class="fa-li fa fa-caret-right"></i>Up to date versions of Firefox and Chrome on Windows, Mac OS X and Linux are known to work.</li>
    <li><i class="fa-li fa fa-caret-right"></i>
        You can <strong>resume</strong> an interrupted or cancelled upload. To resume an upload, simply <strong>send the exact same files</strong> again !
        Make sure the files have the <strong>same names and sizes</strong> as before.
        When your upload starts, you should notice the progress bar jump to where the upload was halted, and continue from there.
    </li>
</ul>

<h3>Uploads up to {size:cfg:max_legacy_file_size} per file without HTML5</h3>
<ul class="fa-ul">
    <li><i class="fa-li fa fa-caret-right"></i>FileSender will warn you should you try to upload a file that is too big for this method.</li>
    <li><i class="fa-li fa fa-caret-right"></i>Resuming uploads is not supported with this method.</li>
</ul>

<h3>Configured service constraints</h3>
<ul class="fa-ul">
    <li><i class="fa-li fa fa-caret-right"></i><strong>Maximum number of recipients : </strong>{cfg:max_transfer_recipients} email addresses separated by a comma or semi-colon</li>
    <li><i class="fa-li fa fa-caret-right"></i><strong>Maximum number of files per transfer : </strong>{cfg:max_transfer_files}</li>
    <li><i class="fa-li fa fa-caret-right"></i><strong>Maximum size per transfer : </strong>{size:cfg:max_transfer_size}</li>
    <li><i class="fa-li fa fa-caret-right"></i><strong>Maximum file size per file for non-HTML5 browsers : </strong>{size:cfg:max_legacy_file_size}</li>
    <li><i class="fa-li fa fa-caret-right"></i><strong>Transfer expiry days : </strong>{cfg:default_transfer_days_valid} (max. {cfg:max_transfer_days_valid})</li>
    <li><i class="fa-li fa fa-caret-right"></i><strong>Guest expiry days : </strong>{cfg:default_guest_days_valid} (max. {cfg:max_guest_days_valid})</li>
</ul>

<h3>Technical details</h3>
<ul class="fa-ul">
    <li><i class="fa-li fa fa-caret-right"></i>
        <strong>{cfg:site_name}</strong> uses the <a href="http://www.filesender.org/" target="_blank">FileSender software</a>.
        FileSender indicates whether or not the HTML5 upload method is supported for a particular browser.
        This depends mainly on the availability of advanced browser functionality, in particular the HTML5 FileAPI.
        Please use the <a href="http://caniuse.com/fileapi" target="_blank">"When can I use..."</a> website to monitor implementation progress of the HTML5 FileAPI for all major browsers.
        In particular support for <a href="http://caniuse.com/filereader" target="_blank">FileReader API</a> and <a href="http://caniuse.com/bloburls" target="_blank">Blob URLs</a> needs to be light green (=supported) for a browser to support uploads larger than {size:cfg:max_legacy_file_size}.
        Please note that although Opera 12 is listed to support the HTML5 FileAPI, it currently does not support all that is needed to support use of the HTML5 upload method in FileSender.
    </li>
</ul>

<p>For more information please visit <a href="http://www.filesender.org/" target="_blank">www.filesender.org</a></p>
