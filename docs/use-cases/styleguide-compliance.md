---
layout: default
parent: Use Cases
title: Styleguide Compliance
---

# Styleguide Compliance

---

{% include legal_disclaimer.html %}
---

## Introduction 

Whether writing or revising code for a client or for internal projects, adhering to a styleguide or code standards document is essential for maintaining consistency, readability, and quality in codebases.  

Below are some tactical guidelines on using AI coding assistants for both the generation of new code and revision of existing code to meet a styleguide.

## Suggested Ways To Use AI Coding Assistants for Styleguide-compliant Code

### Generating new code in compliance with a styleguide

Using an AI coding assistant to generate new compliant code can boiled down to 3 main steps: 
1. Set up relevant context.
2. Prompt the tool for code generation.
3. Manually review the code to ensure quality and styleguide compliance.
4. Apply the suggested code with any necessary corrections.

<details>
<summary>Accomplish this using GitHub Copilot</summary>

{% include context_for_gh_copilot.html %}
some content here
</details>
<br>
<details>
<summary>Accomplish this using Cursor AI</summary>

some content here
</details>

---

### Fixing issues a linter detects but can't resolve

Across languages, linters have varying degrees of ability to detect and resolve issues.

One especially powerful way to use an AI-powered coding assistant is to run a linter like pylint or eslint and give the issues detected to the assistant so it can suggest or even apply remedies.

<details>
<summary>Accomplish this using GitHub Copilot</summary>

some content here
</details>
<br>
<details>
<summary>Accomplish this using Cursor AI</summary>

some content here
</details>

---

### Identifying and/or fixing issues a linter or formatter cannot detect

Linters can only identify and remedy issues based on predefined static rules and pattern matching, whereas AI-powered tools can go beyond this by understanding (for lack of a better term) the program logic and desired behavior of a codebase in its broader context.

<details>
<summary>Accomplish this using GitHub Copilot</summary>

some content here
</details>
<br>
<details>
<summary>Accomplish this using Cursor AI</summary>

some content here
</details>

---

### Generating a linter configuration file from a styleguide
<br>

---

Want to contribute to this guide? Click [here](https://github.com/Bain/ais-coding-assistants/issues).