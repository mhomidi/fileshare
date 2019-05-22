موضوع:‌ بازخورد از {if:target_type=="recipient"} گیرنده {endif}{if:target_type=="guest"}guest{endif}#{target_id} {target.email}

{alternative:plain}

آقا / خانم

ما یک بازخورد از {if:target_type=="recipient"}{endif}{if:target_type=="guest"}{endif}#{target_id} {target.email} دریافت کرده‌ایم. لطفا آن را ببینید

آٰرزوی بهرین‌ها
{cfg:site_name}

{alternative:html}

<p>
    آقا / خانم
</p>

<p>
    ما یک بازخورد از
    {if:target_type=="recipient"}{endif}{if:target_type=="guest"}{endif}#{target_id} {target.email}
    دریافت کرده‌ایم. لطفا آن را ببینید
</p>

<p>
    آٰرزوی بهرین‌ها
    <br />
    {cfg:site_name}
</p>
