<?php

namespace App\Controller;

use App\Entity\Book;
use App\Repository\BookRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    #[Route('library/', name: 'app_book')]
    public function book(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Book::class);
        $books = $repository->findAll();

        return $this->render('book/index.html.twig', [
            'books' => $books,
        ]);
    }

    #[Route('/library/create', name: 'book_new')]
    public function new(Request $request, ManagerRegistry $doctrine): Response
    {
        if ($request->isMethod('POST')) {
            $data = $request->request->all();
            $book = new Book();
            $book->setTitle($data['title']);
            $book->setAuthor($data['author']);
            $book->setIsbn($data['isbn']);
            $book->setImage($data['image']);
<<<<<<< HEAD
    
            $entityManager = $doctrine->getManager();
            $entityManager->persist($book);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_book');
        }
    
=======

            $entityManager = $doctrine->getManager();
            $entityManager->persist($book);
            $entityManager->flush();

            return $this->redirectToRoute('app_book');
        }

>>>>>>> 1152db6 (Reinitializing and reconnecting to GitHub repository)
        return $this->render('book/create.html.twig');
    }

    #[Route('/library/{title}', name: 'show_book')]
    public function showBook(BookRepository $bookRepository, string $title): Response
    {
        $book = $bookRepository->findOneBy(['title' => $title]);

        if (!$book) {
            throw $this->createNotFoundException('The book does not exist');
        }

        return $this->render('book/one_book.html.twig', [
            'book' => $book,
        ]);
    }

    #[Route('/library/edit/{title}', name: 'edit_book')]
    public function edit(Request $request, ManagerRegistry $doctrine, string $title): Response
    {
        $bookRepository = $doctrine->getRepository(Book::class);
        $book = $bookRepository->findOneBy(['title' => $title]);

        if ($request->isMethod('POST')) {
            $data = $request->request->all();
            $book->setTitle($data['title']);
            $book->setAuthor($data['author']);
            $book->setIsbn($data['isbn']);
            $book->setImage($data['image']);
<<<<<<< HEAD
    
            $entityManager = $doctrine->getManager();
            $entityManager->flush();
    
            return $this->redirectToRoute('app_book');
        }
    
        return $this->render('book/edit.html.twig', [
            'book' => $book
        ]);
    
=======

            $entityManager = $doctrine->getManager();
            $entityManager->flush();

            return $this->redirectToRoute('app_book');
        }

        return $this->render('book/edit.html.twig', [
            'book' => $book
        ]);

>>>>>>> 1152db6 (Reinitializing and reconnecting to GitHub repository)
    }

    #[Route('/library/delete/{title}', name: 'delete_book')]
    public function delete(BookRepository $bookRepository, ManagerRegistry $doctrine, string $title): Response
    {
        $book = $bookRepository->findOneBy(['title' => $title]);

        if (!$book) {
            throw $this->createNotFoundException('The book does not exist');
        }

        $entityManager = $doctrine->getManager();
        $entityManager->remove($book);
        $entityManager->flush();

        return $this->redirectToRoute('app_book');
    }

    #[Route('/api/library/books', name: 'show_books')]
    public function showAllBook(
        BookRepository $bookRepository
    ): Response {
        $books = $bookRepository
            ->findAll();

        $response = $this->json($books);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route('api/library/book/{isbn}', name: 'book_by_isbn', methods: ['GET'])]
    public function showBookByIsbn(BookRepository $bookRepository, int $isbn): Response
    {
        $book = $bookRepository->findBookByIsbn($isbn);

        return $this->json($book);
    }



}
