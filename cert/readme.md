convert from .p12 to .pem:

```bash
$> openssl pkcs12 -info -in config/certs/NordeaEid_5295409247.p12
$> openssl pkcs12 -in config/certs/NordeaEid_5295409247.p12 -out config/certs/NordeaEid_5295409247.pem -nodes
```