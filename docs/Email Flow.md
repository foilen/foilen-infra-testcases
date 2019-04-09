# Internal (authenticated user that sends an email)

- Resolve redirections
- For local -> Local Delivery
- For outgoing -> Send via relay if any or directly

# External (coming by SMTP)

- Resolve redirections
- For local -> Local Delivery
- For outgoing 
	- If is a redirection -> Send directly (since could be spam)
	- If is not a redirection -> Deny
