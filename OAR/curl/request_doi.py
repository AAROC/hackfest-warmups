#!/usr/bin/env python

# A simple python script that create a DOI based on system timestamp.

import cgi,time

doi_prefix='11623'
doi =  "%s/sci-gaia:%s" % (doi_prefix,time.time())
print doi
