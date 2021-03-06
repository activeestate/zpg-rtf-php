<?php

namespace ZpgRtf\Objects;

/**
 * The rental_term attribute can be specified with a minimum_contract_length object or, if the contract length is not
 * currently known, by an enum that roughly indicates its likely duration (e.g. "short_term").
 */
class MinimumContractLengthObject implements \JsonSerializable
{
    /** @var null|float */
    private $minimumLength;

    /**
     * Enum (days, weeks, months, years)
     *
     * @var null|string
     */
    private $units;

    /**
     * @return null|float
     */
    public function getMinimumLength()
    {
        return $this->minimumLength;
    }

    /**
     * @param float $minimumLength
     *
     * @return MinimumContractLengthObject
     */
    public function setMinimumLength(float $minimumLength): self
    {
        $this->minimumLength = $minimumLength;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * @param string $units
     *
     * @return MinimumContractLengthObject
     */
    public function setUnits(string $units): self
    {
        $this->units = $units;

        return $this;
    }

    /** {@inheritDoc} */
    public function jsonSerialize(): array
    {
        return array_filter([
            'minimum_length' => $this->getMinimumLength(),
            'units' => $this->getUnits(),
        ]);
    }
}
