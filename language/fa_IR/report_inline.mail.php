موضوع: گزارش درباره‌ی
{target.type} #{target.id}

{alternative:plain}

خانم / آقا

این گزارش از {target.type} شماست:

{target.type} شماره: {target.id}

{if:target.type == "Transfer"} این انتقال فایل‌های {transfer.files} با حجم کل {size:transfer.size} دارد.

این انتقال تا تاریخ {date:transfer.expires} اعتبار دارد.


این انتقال به {transfer.recipients} ارسال شده است.


{endif}{if:target.type == "File"} این فایل با نام {file.path} و اندازه‌ی {size:file.size} تا تاریخ {date:file.transfer.expires} اعتبار دارد.


{endif}
{if:target.type == "Recipient"} این گیرنده با ایمیل {recipient.email} تا تاریخ {date:recipient.expires} انقضا دارد
{endif}

در اینجا لاگی از اتفاقات روی انتقال وجود دارد.

{raw:content.plain}

آرزوی بهترین‌ها
{cfg:site_name}

{alternative:html}

<p>
    خانم / آقا
</p>

<p>
    این گزارش از {target.type} شماست:

    <br /><br />

    {target.type} شماره: {target.id}
    <br /><br />

    {if:target.type == "Transfer"} این انتقال فایل‌های {transfer.files} با حجم کل {size:transfer.size} دارد.

    <br /><br />

    این انتقال تا تاریخ {date:transfer.expires} اعتبار دارد.
    <br /><br />

    این انتقال به {transfer.recipients} ارسال شده است.
    {endif}{if:target.type == "File"} این فایل با نام {file.path} و اندازه‌ی {size:file.size} تا تاریخ {date:file.transfer.expires} اعتبار دارد.


    {endif}
    {if:target.type == "Recipient"} این گیرنده با ایمیل {recipient.email} تا تاریخ {date:recipient.expires} انقضا دارد
    {endif}
</p>

<p>
    در اینجا لاگی از اتفاقات روی انتقال وجود دارد.
    <table class="auditlog" rules="rows">
        <thead>
            <th>Date</th>
            <th>Event</th>
            <th>IP address</th>
        </thead>
        <tbody>
            {raw:content.html}
        </tbody>
    </table>
</p>

<p>
    آرزوی بهترین‌ها
    <br/>
{cfg:site_name}</p>
