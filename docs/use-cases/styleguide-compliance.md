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

Using an AI coding assistant to generate new compliant code can boiled down to 4 main steps: 
1. Set up relevant context.
2. Prompt the tool for code generation.
3. Manually review the code to ensure quality and styleguide compliance.
4. Apply the suggested code with any necessary corrections.

#### <span style="font-size: 1.5em;">Accomplish this using GitHub Copilot in VS Code</span> ####

1. Add the styleguide as a file in your IDE.
![Add Styleguide](../../assets/styleguide_compliance/add_styleguide.gif)   
2. Open the file you want to generate code in. 
3. From your file, press Cmd/Ctrl + I to open the Editor Inline Chat with Copilot.
4. Prompt Copilot to generate code. Tell it to do so in compliance with the styleguide by attaching/adding the styleguide as context.
![Prompt with inline chat](../../assets/styleguide_compliance/create_new_file.gif)
5. Review the generated code. Re-prompt Copilot for it to make changes or make necessary corrections manually.

Note: you can also generate code from the sidebar chat or using inline suggestions.
<br>
<details>
<summary>Accomplish this using Cursor AI</summary>

some content here
</details>

---

### Fixing issues a linter detects but can't resolve

Across languages, linters have varying degrees of ability to detect and resolve issues.

One especially powerful way to use an AI-powered coding assistant is to run a linter like pylint or eslint and give the issues detected to the assistant so it can suggest or even apply remedies.

#### <span style="font-size: 1.5em;">Accomplish this using GitHub Copilot in VS Code</span> ####

There are many ways you could accomplish this, but the below covers one potential way for linting a Python file with pylint.

*Prerequisites*: An installed linter and a linter configuration file, like `.pylintrc`.
1. Open the file you want to lint and resolve issues for.
2. In the terminal, run your lint command, ie `pylint crud.py`.
3. Copy the linting errors identified to your clipboard.
4. Open an inline editor chat with Copilot with Cmd/Ctrl + I.
5. Prompt Copilot to fix the linting errors and paste them in. 
Ie, `The below are linting errors identified by pylint. Please fix them. Do not remove any lines of code without telling me.`
6. Accept the changes*.
7. Repeat steps 2 - 6 as necessary.
8. Review the changes made by Copilot, easily done using the side-by-side Diff Editor.

*You may want to review the changes before accepting them, as opposed to reviewing them in the Diff Editor as suggested in step 8.

The below gif displays the steps above:

![Use Copilot for Linting](../../assets/styleguide_compliance/pylinting.gif)   


<br>
<details>
<summary>Accomplish this using Cursor AI</summary>

some content here
</details>

---

### Identifying and/or fixing issues a linter or formatter cannot detect

Linters can only identify and remedy issues based on predefined static rules and pattern matching, whereas AI-powered tools can go beyond this by understanding (for lack of a better term) requirements from a styleguide that go beyond this.

#### <span style="font-size: 1.5em;">Accomplish this using GitHub Copilot in VS Code</span> ####

1. Add the styleguide as a file in your IDE.
![Add Styleguide](../../assets/styleguide_compliance/add_styleguide.gif)   
2. Open the file you want to edit or review.
3. Open the sidebar Copilot chat with Cmd/Ctrl + Shift + I or using the icon next to the Command Palette.
![Open Sidebar Copilot Chat](../../assets/styleguide_compliance/open_sidebar_copilot.gif)   

4. Prompt Copilot to identify code that does not comply with the styleguide, specifically considering things that would not be caught by your linter or formatter.<br><br>
    Ie, `Please identify where #file:crud.py does not comply with the styleguide #file:google_python_stylguide.md. Pay special attention to things that won't be caught by pylint or black (formatter).`

    Note that in the sidebar chat, you can give files as context by using the # symbol to tag them.

    ![Open Sidebar Copilot Chat](../../assets/styleguide_compliance/review_for_styleguide_compliance.gif)   

5. Consider the suggestions in the response. Consider asking Copilot to generate code to fix the issues or manually fix them yourself.

Tips: 
- Consider creating a new file that summarizes requirements from the styleguide that are not caught by your linter or formatter, so you can give Copilot that new file as context.
    Moreover, consider asking Copilot to review the styleguide with you to identify such requirements that could be added to the new file.
- Do not rely entirely on Copilot to achieve compliance with the styleguide. Copilot can speed up your work here, but it is up to you to review suggestions and confirm that the code meets the requirements of the styleguide.
- Ask Copilot to source where (in the styleguide) its suggestions are coming from. This is to ensure it does not provide you with hallucinated requirements.
- 
<br>
<details>
<summary>Accomplish this using Cursor AI</summary>

some content here
</details>


---

Want to contribute to this guide? Click [here](https://github.com/Bain/ais-coding-assistants/issues).