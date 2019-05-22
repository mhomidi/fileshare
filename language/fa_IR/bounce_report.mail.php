موضوع: مشکل در ارسال پیام

{alternative:plain}

آقا / خانم

یک یا چند گیرنده این پیام برایشان نرسید.

{each:bounces as bounce}
{if:bounce.target_type=="Recipient"}
  - انتقال #{bounce.target.transfer.id} گیرنده {bounce.target.email} در {datetime:bounce.date} ({bounce.target.transfer.link})
{endif}{if:bounce.target_type=="Guest"}
  - مهمان {bounce.target.email} در {datetime:bounce.date}
{endif}
{endeach}

اطلاعات بیشتر در:
‌ {cfg:site_url}

آرزوی بهترین‌ها برای شما
{cfg:site_name}

{alternative:html}

<p>
    آقا / خانم
</p>

<p>
    یک یا چند گیرنده این پیام برایشان نرسید.
</p>

<ul>
{each:bounces as bounce}
    <li>
    {if:bounce.target_type=="Recipient"}
        <a href="{bounce.target.transfer.link}">انتقال #{bounce.target.transfer.id}</a> گیرنده {bounce.target.email} در {datetime:bounce.date}
    {endif}{if:bounce.target_type=="Guest"}
        مهمان {bounce.target.email} در {datetime:bounce.date}
    {endif}
    </li>
{endeach}
</ul>

<p>
    اطلاعات بیشتر در:‌ <a href="{cfg:site_url}">{cfg:site_url}</a>
</p>

<p>
    آرزوی بهترین‌ها برای شما
    <br />
    {cfg:site_name}
</p>
