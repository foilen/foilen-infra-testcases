# Summary

Prepare some accounts and redirections.

# Steps

When you see *email@out* , use any outside email. (E.g gmail account)

1. https://infra.foilen-lab.com/pluginresources/create/James%20Email%20Server
    1. Email of the Postmaster: postmaster@foilen-lab.com
    1. SMTP/IMAP/POP3 Certificate: mail.foilen-lab.com
1. Click *Create*
1. Create domain: https://infra.foilen-lab.com/pluginresources/create/Email%20Domain
    1. Domain Name: foilen-lab.com
    1. MX/IMAP/POP3 Domain Name: mail.foilen-lab.com
    1. SMTP/IMAP/POP3 Certificate: mail.foilen-lab.com
    1. Email Relay (Optional): Put one
1. Create accounts: https://infra.foilen-lab.com/pluginresources/create/Email%20Account
    1. postmaster foilen-lab.com
    1. account1 foilen-lab.com
    1. account2 foilen-lab.com
    1. catchall foilen-lab.com
1. Create catch-all redirection:
    1. https://infra.foilen-lab.com/pluginresources/create/Email%20Redirection
  1. Account Name: (leave empty)
  1. Redirect To: catchall@foilen-lab.com
  1. Installed on Domain: foilen-lab.com
1. Create redirections: https://infra.foilen-lab.com/pluginresources/create/Email%20Redirection
    1. redir1 -> account1@foilen-lab.com
    1. redir1-2 -> account1@foilen-lab.com account2@foilen-lab.com
    1. rediro -> email@out
    1. redir1-o -> account1@foilen-lab.com email@out

# Expected results

1. Successfully created
