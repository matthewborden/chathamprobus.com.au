from subprocess import call
import os, time

call(["pandoc", "-o", "output.pdf", "README.md"])
time.sleep(1)
os.system("output.pdf")
