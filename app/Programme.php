<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'programmes';

    /**
     * @var array $fillable
     */
    protected $fillable = ['id', 'title', 'channel', 'repeat', 'genre', 'broadcast'];

    /**
     * @var bool $timestamps
     */
    public $timestamps = false;

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->attributes['title'] = $title;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->attributes['title'];
    }

    /**
     * @param string $channel
     */
    public function setChannel(string $channel)
    {
        $this->attributes['channel'] = $channel;
    }

    /**
     * @return string
     */
    public function getChannel(): string
    {
        return $this->attributes['channel'];
    }

    /**
     * @param bool $repeat
     */
    public function setRepeat(bool $repeat)
    {
        $this->attributes['repeat'] = $repeat;
    }

    /**
     * @return bool
     */
    public function isRepeat(): bool
    {
        return true === $this->attributes['repeat'];
    }

    /**
     * @param string|null $genre
     */
    public function setGenre(string $genre = null)
    {
        $this->attributes['genre'] = $genre;
    }

    /**
     * @return string
     */
    public function getGenre(): string
    {
        return $this->attributes['genre'];
    }

    /**
     * @param string $date
     */
    public function setBroadcast(string $date)
    {
        $this->attributes['broadcast'] = new \DateTime($date);
    }

    /**
     * @return \DateTime
     */
    public function getBroadcast(): \DateTime
    {
        return $this->attributes['broadcast'];
    }
}
