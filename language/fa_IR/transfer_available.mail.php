موضوع: فایل‌ها اماده دانلود است
موضوع: {transfer.subject}

{alternative:plain}

آقا / خانم

فایل‌ها در
{cfg:site_name}
توسط
{transfer.user_email}
آپلود شده است و شما می توانید آن ها را دانلود کنید.

{if:transfer.files>1}{each:transfer.files as file}
  - {file.path} ({size:file.size})
{endeach}{else}
{transfer.files.first().path} ({size:transfer.files.first().size})
{endif}

لینک دانلود: {recipient.download_link}

این انتقال تا تاریخ
{date:transfer.expires}
اعتبار دارد و پس از آن غیر قابل استفاده است.

{if:transfer.message || transfer.subject}
ایمیل شخصی از {transfer.user_email}: {transfer.subject}

{transfer.message}
{endif}

آرزوی بهترین‌ها
{cfg:site_name}

{alternative:html}

<p>
    آقا / خانم
</p>

<p>
    فایل‌ها در
    <a href="{cfg:site_url}">{cfg:site_name}</a>
    توسط
    <a href="mailto:{transfer.user_email}">{transfer.user_email}</a>
    آپلود شده است و شما می توانید آن ها را دانلود کنید.
</p>

<table rules="rows">
    <thead>
        <tr>
            <th colspan="2">جزيیات</th>
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
        {if:transfer.files>1}
        <tr>
            <td>سایز</td>
            <td>{size:transfer.size}</td>
        </tr>
        {endif}
        <tr>
            <td>اعتبار</td>
            <td>{date:transfer.expires}</td>
        </tr>
        <tr>
            <td>لینک دانلود</td>
            <td><a href="{recipient.download_link}">{recipient.download_link}</a></td>
        </tr>
    </tbody>
</table>

{if:transfer.message}
<p>
    ایمیل شخصی از
    {transfer.user_email}:
</p>
<p class="message">
    {transfer.message}
</p>
{endif}

<p>
    آرزوی بهترین‌ها

    <br />
    {cfg:site_name}
</p>
