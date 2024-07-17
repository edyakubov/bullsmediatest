# Shipment Order Management System Architecture Overview

This document outlines the conceptual architecture for a Shipment Order Management System tailored for an online store.
It describes the system's workflow from product submission to delivery status update, focusing on integration with the
NovaPoshta Delivery Service. Additionally, it addresses the system's scalability to accommodate multiple delivery
services.

## System Workflow

1. **Order Submission**: Users submit orders, including order details, through the system.
2. **Order Processing**: The system processes these orders, leveraging the NovaPoshta Delivery Service to handle
   shipment.
3. **Status Update**: Upon processing, the system updates users with the order's delivery status.

## Supporting Multiple Delivery Services

To extend the system's capabilities to support various delivery services, the following enhancements are proposed:

- **Delivery Service Enumeration**: Introduce an enumeration class that lists all supported delivery services. This
  class serves as a central reference point for managing available services.

- **Request Modification**: Modify the `CreateShipmentOrderRequest` class to allow users to specify their preferred
  delivery service. This adjustment enables the system to dynamically cater to user preferences.

- **Service-Specific Logic**: For each new delivery service, implement a dedicated class encapsulating its unique logic.
  This approach ensures that the system can efficiently interact with different delivery services without compromising
  on functionality.

- **Service Selection Mechanism**: Adopt a Driver/Manager pattern to intelligently select the appropriate delivery
  service based on user preference or other criteria. This mechanism enhances the system's flexibility and adaptability
  to varying requirements.

- **Additional Info to Shipment System**: We can add another fields to the shipment system to support multiple delivery services. 
- For example, we can add comment, preferred deliverable date/time, change type of delivering (to door/to office), also we can specify the another person etc...
- there a lot of potential fields that can be added to the shipment system, it only depends of shipment company API and possible services.
