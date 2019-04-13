<h3>Welcome to FileSender of UT</h3>

<p>
    FileSender of UT is a web based application that allows authenticated
    users to securely and easily send arbitrarily large files to other
    users. Users without an account can be sent a guest upload voucher by an
    authenticated user. FileSender of UT is developed to the requirements of
    the higher education and research community.
</p>


<h4>For authenticated users...</h4>

<p>
    If this installation of FileSender of UT is on your research facility
    the login button on the top right of the page should let you login
    using standard institutional account. If you are unsure
    about what login credentials to use to access this FileSender of UT then
    please contact your local IT support.
</p>

<p>
    As an authenticated user you should be able to upload files one or
    more times and either have FileSender of UT email the recipients after
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


<h3>Uploads up to {size:cfg:max_legacy_file_size} per file without HTML5</h3>
<ul class="fa-ul">
    <li><i class="fa-li fa fa-caret-right"></i>FileSender of UT will warn you should you try to upload a file that is too big for this method.</li>
    <li><i class="fa-li fa fa-caret-right"></i>Resuming uploads is not supported with this method.</li>
</ul>

<h3>Limitations  for users</h3>
<ul class="fa-ul">
    <li><i class="fa-li fa fa-caret-right"></i><strong>Teacher: </strong>1 GB</li>
    <li><i class="fa-li fa fa-caret-right"></i><strong>Student: </strong>500 MB</li>
    <li><i class="fa-li fa fa-caret-right"></i><strong>Employee: </strong>300 MB</li>
</ul>


<h3>Configured service constraints</h3>
<ul class="fa-ul">
    <li><i class="fa-li fa fa-caret-right"></i><strong>Maximum number of recipients : </strong>{cfg:max_transfer_recipients} email addresses separated by a comma or semi-colon</li>
    <li><i class="fa-li fa fa-caret-right"></i><strong>Maximum number of files per transfer : </strong>{cfg:max_transfer_files}</li>
    <li><i class="fa-li fa fa-caret-right"></i><strong>Maximum transfer expiry days : </strong>{cfg:max_transfer_days_valid}</li>
</ul>

<p>For more information please visit <a href="http://www.FileSender of UT.org/" target="_blank">www.FileSender of UT.org</a></p>
