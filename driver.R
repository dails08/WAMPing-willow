library(knitr)
library(rmarkdown)


args <- commandArgs(TRUE)

render(input = "./opsreport.Rmd", output_format = "html_document", output_file = "./OpsReportv4.html", params = list(startingDate = args[1], endingDate = args[2]))

