subject: File(s) deleted
subject: (files deleted) {transfer.subject}

{alternative:plain}

Dear Sir or Madam,

Your transfer n°{transfer.id} has been deleted from {cfg:site_name} and is no longer available for download ({transfer.link}).

Best regards,
{cfg:site_name}

{alternative:html}

<p>
    Dear Sir or Madam,
</p>

<p>
    Your <a href="{transfer.link}">transfer n°{transfer.id}</a> has been deleted from <a href="{cfg:site_url}">{cfg:site_name}</a> and is no longer available for download.
</p>

<p>
    Best regards,<br />
    {cfg:site_name}
</p>
