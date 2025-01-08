# GitPod Commerce

[NB GitPod have about-faced on their offering and this way of working is sadly not going to be around much longer]

Install and run a Drupal Commerce Kickstart Demo store in the browser, with a click of a link!

This is a fully-fledged DDEV-based development environment, based on the DDEV/GitPod/DrupalPod/Commerce Quickstart repos.

[Click to launch!](https://gitpod.io/?autostart=true#https://github.com/NikLP/gitpod-commerce)

## Notes

- user/pass is admin - this is supposed to be for demo/dev only, so tighten this if needs be :) 
- Web port is public by default so the URL is shareable whilst the gitpod instance is running
- All initial config is exported & committed so any dev work will not be swamped by that
- Includes masquerade & devel module as dev modules
- If dev includes things like offsite/redirect payment gateways you may need to relax
  `cookie_samesite` as far as `None` to get the cookies to return with the offsite request
