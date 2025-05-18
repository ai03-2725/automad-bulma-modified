# Automad Bulma Theme Modified

A modified version of the [dahmen/automad-bulma](https://packages.automad.org/dahmen/automad-bulma) theme.  

## Changes

- Slideshows/carousels/heroes only display images with the term `slide` in its filename.  
- The carousels search for `webp`, `avif`, and `jpeg` extensions in addition to the stock `png` and `jpg`.
- Made the `Hide Title And Teaser` option apply to most pages.
- Added the `Hide Page Menu` option for hiding in-page navigation menus.
- Removed the sign-in URL in the footer.
- Added a Minimal Page template which includes nothing except the navbar and footer.  
- Forced the pages to be at minimum the full height of the screen; footer no longer floats upwards on pages with short content.

## Installation

For some reason, automad's package installer does not seem to be functioning when specifying an external repository.  
Please follow these steps instead until it works again:

1. Install `dahmen/automad-bulma` via the community package manager. This causes the jquery requirement to be installed properly.  
2. Install this repo via packages -> private repositories; use the name `ai03/automad-bulma-modified`; specify the repo URL and branch `master`. (This entire step doesn't seem to do anything since all it does is create a copy of these files under the `vendor` folder rather than under `packages`, but may as well)
3. Directly enter the `packages` directory of the automad installation, create a folder named `ai03`, and clone the contents of this repository into it.
4. Set permissions on the new folder/files accordingly.  