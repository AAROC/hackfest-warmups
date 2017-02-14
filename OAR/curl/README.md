## How to perform the warm-up

The folder contains some examples on how to submit different kinds of assets on the Sci-GaIA OAR. In particular you can find examples for datasets, images etc...

The <object_type>-submission-to-OAR.md file contains the `curl` to submit the digital object to the OAR and the expected output. While the <object_type>-submission-to-OAR.xml file contains xml used to describe the digital object you're going to upload. In this file you have to replace the `<subfield code="a">` value, this value represents the reserved DOI for the asset. To generate a test DOI you can issue:
```
  python request_doi.py
```
This script will return a test that yu can put in the xml file.
