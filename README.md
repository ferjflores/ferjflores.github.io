# ais-coding-assistants
Guide for adoption of AI coding assistants

The content of this repository is presented at https://verbose-doodle-6kny6jr.pages.github.io/

## Overview

WIP

## Contributing

There are 2 main ways to contribute:
### 1. [Raise an ISSUE](https://github.com/Bain/ais-dsmle-delivery-standards/issues)
- To request content (new / updates), point out issues or raise topics for broader discussions. 
- Click the link above or navigate to the Issues page for this repository and fill out the appropriate template.

### 2. Open up a Pull Request
- If you wish to directly contribute to the repository, see the sections below to familiarize yourself with the content and the guidelines.

### Structure
---

The `_config.yml` file is used to manage the configuration of the deployment

The `docs` folder contains the actual content in folders. Each folder represents a section.

Unwritten sections don't have folders.

Any customizations to the GitHub pages are present inside the docs folder under subfolders beginning with `_`.

`_sass` contains custom color schemes and font sizes for certain elements. 

`_includes` contains a customization that allows the title + logo to be displayed on the site.

### Adding Content
---

#### Contributing Guidelines

See `contributing.md` for contributing content to a particular section.

#### Contributing to an existing section
Open up a PR with the necessary edits. If adding headings, refer to [this](https://just-the-docs.com/docs/ui-components/typography/#headings) hierarchy. A page starts with Heading 1.

#### Creating a new main section
- Each section has its own folder with `-`'s used for spaces. Eg: `foo-bar-abc`.
- Each section has an `intro.md` file that describes the section. A table of contents will automatically be added with the child pages. 
- Include a metadata section at the top of `intro.md` with the title and position on the navigation bar. Eg:
    ```
    ---
    layout: default
    title: Model Deployment
    nav_order: 3
    nav_enabled: true
    ---
    ```
    **NOTE: Without this the section will not be included.**
#### Creating a new child section
- Subsections / Child sections are created as separate markdown files where `-`'s are used for spaces. Each subsection file should have the following metadata specifying its parent at the top of the file. Eg:
    ```
    ---
    layout: default
    parent: Model Deployment
    title: Ensuring Availability
    ---
    ```
    **NOTE: Without this the subsection will not be included.**

#### Adding images

There are 2 ways to add an image.

##### Option 1: Native markdown
`![title](relative/path/to/image)`

##### Option 2: Using HTML for more customization
```html
<div style="text-align: center;">
    <img src="assets/dev-qa-prod-branch.jpeg" alt="Branch Illustration" width="70%"/>
</div>

```


### Developing Locally
---

If you want to see how diffs look on a page, the site can be viewed and developed locally using `jekyll`.

#### Requirements

```
ruby 3.3.5
bundler 2.5.9
jekyll
```

#### Instructions

1. [Follow instructions to install Ruby and Jekyll](https://jekyllrb.com/docs/installation/macos/)
2. run `gem install bundler -v 2.5.9`
3. In the root run `bundler install`
4. To serve: `bundle exec jekyll serve`
The deployment should show up on `http://localhost:4000`
