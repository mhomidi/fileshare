موضوع: دانلود گیرنده
{alternative:plain}

آقا / خانم

فایل‌هایی که شما آپلود کردیدتوسط{recipient.email}از{cfg:site_name}دانلود شده است.

{if:files>1}{each:files as file}
  - {file.path} ({size:file.size})
{endeach}{else}
{files.first().path} ({size:files.first().size})
{endif}

شما می توانید آمار دانلود‌ها را در{files.first().transfer.link}مشاهده کنید.

آرزوی بهترین‌ها
{cfg:site_name}

{alternative:html}

<p>
    آقا / خانم
</p>

<p>


    فایل‌هایی که شما آپلود کردید
    توسط
    {recipient.email}
    از
    {cfg:site_name}
    دانلود شده است

</p>

<p>
    {if:files>1}
    <ul>
        {each:files as file}
            <li>{file.path} ({size:file.size})</li>
        {endeach}
    </ul>
    {else}
    {files.first().path} ({size:files.first().size})
    {endif}
</p>

<p>
    شما می توانید آمار دانلود‌ها را در <a href="{files.first().transfer.link}">{files.first().transfer.link}</a>
    مشاهده کنید.


</p>

<p>
    آرزوی بهترین‌ها
    <br />
    {cfg:site_name}
</p>
