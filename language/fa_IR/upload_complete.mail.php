موضوع: فایل‌ها با موفقیت آپلود شدند.
{alternative:plain}

خانم / آقا


فایل‌های زیر با موفقیت در
{cfg:site_name}
آپلود شدند.

{if:transfer.files>1}{each:transfer.files as file}
  - {file.path} ({size:file.size})
{endeach}{else}
{transfer.files.first().path} ({size:transfer.files.first().size})
{endif}

اطلاعات بیشتر {transfer.link}

آرزوی بهترین‌ها
{cfg:site_name}

{alternative:html}

<p>
    خانم / آقا
</p>

<p>
    فایل‌های زیر با موفقیت در
    <a href="{cfg:site_url}">{cfg:site_name}</a>
    آپلود شدند.
</p>

<table rules="rows">
    <thead>
        <tr>
            <th colspan="2">جزییات</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>فایل‌ها</td>
            <td>
                {if:transfer.files>1}
                <ul>
                    {each:transfer.files as file}
                        <li>{file.path} ({size:file.size})</li>
                    {endeach}
                </ul>
                {else}
                {transfer.files.first().path} ({size:transfer.files.first().size})
                {endif}
            </td>
        </tr>
        <tr>
            <td>اندازه</td>
            <td>{size:transfer.size}</td>
        </tr>
        <tr>
            <td>اطلاعات بیشتر</td>
            <td><a href="{transfer.link}">{transfer.link}</a></td>
        </tr>
    </tbody>
</table>

<p>
    آرزوی بهترین‌ها
    <br />
    {cfg:site_name}
</p>
