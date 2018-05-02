PANDOC=pandoc

INPUTDIR=$(CURDIR)/src
OUTPUTDIR=$(CURDIR)

pdf:
	pandoc -s -f markdown-auto_identifiers \
	"$(INPUTDIR)"/resume.md \
	-o "$(OUTPUTDIR)/resume.pdf" \
	--template="$(INPUTDIR)/resume_template.tex" \
	--latex-engine=xelatex
