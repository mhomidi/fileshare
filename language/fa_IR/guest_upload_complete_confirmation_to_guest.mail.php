موضوع: مهمان آپلود خود را تمام کرد

{alternative:plain}

آقا / خانم

مهمان زیر آپلود خود را به پایان رساند:

مهمان: {guest.email}
لینک گواهی: {cfg:site_url}?s=upload&vid={guest.token}

این گواهی تا تاریخ {date:guest.expires} معتبر است


آرزوی بهترین‌ها
{cfg:site_name}

{alternative:html}

<p>
    Dear Sir or Madam,
</p>

<p>
    مهمان زیر آپلود خود را به پایان رساند:
</p>

<table rules="rows">
    <thead>
    <tr>
        <th colspan="2">Voucher details</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>مهمان</td>
        <td><a href="mailto:{guest.email}">{guest.email}</a></td>
    </tr>
    <tr>
        <td>لینک گواهی</td>
        <td><a href="{cfg:site_url}?s=upload&vid={guest.token}">{cfg:site_url}?s=upload&vid={guest.token}</a></td>
    </tr>
    <tr>
        <td>اعتبار</td>
        <td>{date:guest.expires}</td>
    </tr>
    </tbody>
</table>

<p>
    آرزوی بهترین‌ها

    <br />
    {cfg:site_name}
</p>
