یادآوری خودکار برای انتقال {transfer.id} انجام شد.

{alternative:plain}

آقا / خانم

یک یادآوری برای دانلود فایل‌ شما برای کسانی که تا به حال انتقال {transfer.id} را در {cfg:site_name} ({transfer.link}) نکرده اند ارسال شد.


{each:recipients as recipient}
  - {recipient.email}
{endeach}

آرزوی بهترین‌ها
{cfg:site_name}

{alternative:html}

<p>
    Dear Sir or Madam,
</p>

<p>
    یک یادآوری برای دانلود فایل‌ شما برای کسانی که تا به حال انتقال

    <a href="{transfer.link}">transfer n°{transfer.id}</a> را در <a href="{cfg:site_url}">{cfg:site_name}</a>
    نکرده اند ارسال شد.

</p>

<p>
    <ul>
    {each:recipients as recipient}
      <li>{recipient.email}</li>
    {endeach}
    </ul>
</p>

<p>
    آرزوی بهترین‌ها
    <br />
    {cfg:site_name}
</p>
