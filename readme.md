# Frosting - Invite Only User Registration for Laravel

Built as a Laravel package with an easy JSON api route system.

## Features

- [ ] Api route to list Invites
- [ ] Api route to create an Invite
- [ ] Api route to delete and Invitaion
- [ ] Api route to complete a registration
- [ ] Frosting class to handle all other needed features



## Installation

With Composer
``` bash
composer require mission4/frosting
```


## Usage

### Invite a User

```php
Frosting::invite('user@example.com');
```

This creates a new `Invitation` in the database with the users email and a unique code.

You can also then send the Invitation using the `send()` method on the returned Invitation.

```Php
Frosting::invite('user@example.com')->send();
```

This will use the default mail driver to send an email to `user@example.com`

- email
- Unique_id
- user_id

## Class Methods

### `invite($email)`
Invite a person with `$email`.
Returns an instance of the `Invite::class`

### `list()`
Get a collection of all the invites.

### `invalidateInvitesForEmail($email)`
Delete any invites with the said email.

### `resolveInvite($unique_id)`
Resolve an Invite by the Unique Identifier.

### `confirmEmail($email)`
Confirm there is an invitation for the said email.

### `registerInviteObserver()`
Register the Invite Observer to add a creating event for generating the Unique IDs.