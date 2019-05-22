موضوع: گزارش روزانه انتقال

{alternative:plain}

آقا / خانم

در زیر خلاصه‌ی انتقال خود را مشاهده کنید.  {transfer.id} (بزوز شده در {date:transfer.created}) :

{if:events}
{each:events as event}
  - گیرنده {event.who} دانلود کرده است {if:event.what == "archive"}archive{else}فایل {event.what_name}{endif} در {datetime:event.when}
{endeach}
{else}
دانلود صورت نگرفته
{endif}

اطلاعات بیشتر در:
 {transfer.link}

آرزوی بهترین‌ها برای شما
{cfg:site_name}

{alternative:html}

<p>
    آقا / خانم
</p>

<p>
    - گیرنده {event.who} دانلود کرده است {if:event.what == "archive"}archive{else}فایل {event.what_name}{endif} در {datetime:event.when}
</p>

{if:events}
<ul>
{each:events as event}
    <li>گیرنده {event.who} دانلود کرده {if:event.what == "archive"}archive{else}فایل {event.what_name}{endif} در {datetime:event.when}</li>
{endeach}
</ul>
{else}
<p>
    دانلود صورت نگرفته
</p>
{endif}

<p>
    اطلاعات بیشتر در:
    <a href="{transfer.link}">{transfer.link}</a>
</p>

<p>
    آرزوی بهترین‌ها برای شما
    <br />
    {cfg:site_name}
</p>
