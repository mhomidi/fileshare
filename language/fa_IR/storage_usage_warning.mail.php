موضوع: هشدار استفاده از حافظه

{alternative:plain}

آقا / خانم

استفاده از حافظه‌ی {cfg:site_name} هشدار داده است:‌

{each:warnings as warning}
  - {warning.filesystem} ({size:warning.total_space}) تنها دارای {size:warning.free_space} خافظه ({warning.free_space_pct}%) است.
{endeach}

اطلاعات بیشتر در {cfg:site_url}

آرزوی بهترین‌ها
{cfg:site_name}

{alternative:html}

<p>
    آقا / خانم
</p>

<p>
    استفاده از حافظه‌ی
    {cfg:site_name}
    هشدار داده است:‌
</p>

<ul>
{each:warnings as warning}
    <li>{warning.filesystem} ({size:warning.total_space}) تنها دارای {size:warning.free_space} خافظه ({warning.free_space_pct}%) است.</li>
{endeach}
</ul>

<p>
    اطلاعات بیشتر در<a href="{cfg:site_url}">{cfg:site_url}</a>
</p>

<p>
    Best regards,
    <br />
    {cfg:site_name}
</p>
