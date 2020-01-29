<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BookRepository")
 */
class Book
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $ratingCount;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $bookType;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $discountPrice;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $actualPrice;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $savePrice;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $savePricePercent;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $ageRange;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $gradeLevel;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $lexileMeasure;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $series;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $paperback;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $publisher;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $isbn10;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $isbn13;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $asin;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $productDimensions;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $shippingWeight;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $averageCustomerReview;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $averageCustomerReviewCount;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $amazonBestSellersRank;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getRating(): string
    {
        return $this->rating;
    }

    /**
     * @param string $rating
     */
    public function setRating(string $rating): void
    {
        $this->rating = $rating;
    }

    /**
     * @return string
     */
    public function getRatingCount(): string
    {
        return $this->ratingCount;
    }

    /**
     * @param string $ratingCount
     */
    public function setRatingCount(string $ratingCount): void
    {
        $this->ratingCount = $ratingCount;
    }

    /**
     * @return string
     */
    public function getBookType(): string
    {
        return $this->bookType;
    }

    /**
     * @param string $bookType
     */
    public function setBookType(string $bookType): void
    {
        $this->bookType = $bookType;
    }

    /**
     * @return string
     */
    public function getDiscountPrice(): string
    {
        return $this->discountPrice;
    }

    /**
     * @param string $discountPrice
     */
    public function setDiscountPrice(string $discountPrice): void
    {
        $this->discountPrice = $discountPrice;
    }

    /**
     * @return string
     */
    public function getActualPrice(): string
    {
        return $this->actualPrice;
    }

    /**
     * @param string $actualPrice
     */
    public function setActualPrice(string $actualPrice): void
    {
        $this->actualPrice = $actualPrice;
    }

    /**
     * @return string
     */
    public function getSavePrice(): string
    {
        return $this->savePrice;
    }

    /**
     * @param string $savePrice
     */
    public function setSavePrice(string $savePrice): void
    {
        $this->savePrice = $savePrice;
    }

    /**
     * @return string
     */
    public function getSavePricePercent(): string
    {
        return $this->savePricePercent;
    }

    /**
     * @param string $savePricePercent
     */
    public function setSavePricePercent(string $savePricePercent): void
    {
        $this->savePricePercent = $savePricePercent;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getAgeRange(): string
    {
        return $this->ageRange;
    }

    /**
     * @param string $ageRange
     */
    public function setAgeRange(string $ageRange): void
    {
        $this->ageRange = $ageRange;
    }

    /**
     * @return string
     */
    public function getGradeLevel(): string
    {
        return $this->gradeLevel;
    }

    /**
     * @param string $gradeLevel
     */
    public function setGradeLevel(string $gradeLevel): void
    {
        $this->gradeLevel = $gradeLevel;
    }

    /**
     * @return string
     */
    public function getLexileMeasure(): string
    {
        return $this->lexileMeasure;
    }

    /**
     * @param string $lexileMeasure
     */
    public function setLexileMeasure(string $lexileMeasure): void
    {
        $this->lexileMeasure = $lexileMeasure;
    }

    /**
     * @return string
     */
    public function getSeries(): string
    {
        return $this->series;
    }

    /**
     * @param string $series
     */
    public function setSeries(string $series): void
    {
        $this->series = $series;
    }

    /**
     * @return string
     */
    public function getPaperback(): string
    {
        return $this->paperback;
    }

    /**
     * @param string $paperback
     */
    public function setPaperback(string $paperback): void
    {
        $this->paperback = $paperback;
    }

    /**
     * @return string
     */
    public function getPublisher(): string
    {
        return $this->publisher;
    }

    /**
     * @param string $publisher
     */
    public function setPublisher(string $publisher): void
    {
        $this->publisher = $publisher;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getIsbn10(): string
    {
        return $this->isbn10;
    }

    /**
     * @param string $isbn10
     */
    public function setIsbn10(string $isbn10): void
    {
        $this->isbn10 = $isbn10;
    }

    /**
     * @return string
     */
    public function getIsbn13(): string
    {
        return $this->isbn13;
    }

    /**
     * @param string $isbn13
     */
    public function setIsbn13(string $isbn13): void
    {
        $this->isbn13 = $isbn13;
    }

    /**
     * @return string
     */
    public function getAsin(): string
    {
        return $this->asin;
    }

    /**
     * @param string $asin
     */
    public function setAsin(string $asin): void
    {
        $this->asin = $asin;
    }

    /**
     * @return string
     */
    public function getProductDimensions(): string
    {
        return $this->productDimensions;
    }

    /**
     * @param string $productDimensions
     */
    public function setProductDimensions(string $productDimensions): void
    {
        $this->productDimensions = $productDimensions;
    }

    /**
     * @return string
     */
    public function getShippingWeight(): string
    {
        return $this->shippingWeight;
    }

    /**
     * @param string $shippingWeight
     */
    public function setShippingWeight(string $shippingWeight): void
    {
        $this->shippingWeight = $shippingWeight;
    }

    /**
     * @return string
     */
    public function getAverageCustomerReview(): string
    {
        return $this->averageCustomerReview;
    }

    /**
     * @param string $averageCustomerReview
     */
    public function setAverageCustomerReview(string $averageCustomerReview): void
    {
        $this->averageCustomerReview = $averageCustomerReview;
    }

    /**
     * @return string
     */
    public function getAverageCustomerReviewCount(): string
    {
        return $this->averageCustomerReviewCount;
    }

    /**
     * @param string $averageCustomerReviewCount
     */
    public function setAverageCustomerReviewCount(string $averageCustomerReviewCount): void
    {
        $this->averageCustomerReviewCount = $averageCustomerReviewCount;
    }

    /**
     * @return string
     */
    public function getAmazonBestSellersRank(): string
    {
        return $this->amazonBestSellersRank;
    }

    /**
     * @param string $amazonBestSellersRank
     */
    public function setAmazonBestSellersRank(string $amazonBestSellersRank): void
    {
        $this->amazonBestSellersRank = $amazonBestSellersRank;
    }
}
