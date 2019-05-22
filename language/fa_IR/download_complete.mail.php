موضوع:‌ اتمام دانلود
{alternative:plain}

آقا / خانم

دانلود شما از {if:files>1}فایل‌های{else}فایل{endif} زیر به اتمام رسید :

{if:files>1}{each:files as file}
  - {file.path} ({size:file.size})
{endeach}{else}
{files.first().path} ({size:files.first().size})
{endif}

آروزی بهترین‌ها
{cfg:site_name}

{alternative:html}

<p>
    آقا / خانم
</p>

<p>
    دانلود شما از {if:files>1}فایل‌های{else}فایل{endif} زیر به اتمام رسید :
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
    آروزی بهترین‌ها
    <br />
    {cfg:site_name}
</p>
