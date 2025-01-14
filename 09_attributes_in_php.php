<?php

// PHP 8 introduced attributes, 
// which provide a way to add metadata to classes, methods, properties, 
// and other code elements. This replaces the need for docblocks in many cases, 
// giving developers a cleaner and more structured way to add metadata to their code.

#[Route('/user/{id}', methods: ['GET'])]
class UserController {
    public function getUser(int $id) {
        // Logic to retrieve user by ID
    }
}


// Attributes make it easier to implement features like routing, validation, 
// or dependency injection without relying on external libraries or docblocks.