# An Example API using FRAPI

FRAPI is an open source, lightweight framework for building REST-like APIs in
PHP. It is actively developed, battle-hardened (aka tested in the real world),
and has a strong development community, so it is a logical choice for anyone
looking to make a production API.

Unfortunately, the default directory structure that FRAPI comes bundled with
has a deep nesting and does not lend itself to being used as a standalone git
submodule. The default structure essentially encourages the developer to build
their application directly on top of the FRAPI source files, so upgrading FRAPI
to a later version can be a bit difficult and often requires manual
intervention.

This example frapi application aims to accomplish two goals

1. Allow the use of frapi as a git submodule so that it can be upgraded to the
   latest version without interfering with your custom API code.
2. Demonstrate how a common API can be built using FRAPI.